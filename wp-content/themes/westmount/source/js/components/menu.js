import vars from '../_vars';
import {
	addCustomClass,
	removeCustomClass,
	fadeIn,
	fadeOut,
	removeClassInArray
} from '../functions/customFunctions';

const {activeClass,customMenuNavInner,dataMenuItems, dataTrigger,backBtn, allMenus} = vars;

function initDesktopMenu() {
	let currentActiveMenu = null;

	function closeMenu(menuElement) {
		if (menuElement && menuElement.classList.contains(activeClass)) {
			const triggerElement = document.querySelector(`[data-trigger="${menuElement.getAttribute('data-menu')}"]`);
			removeCustomClass(triggerElement);
			removeCustomClass(menuElement);
			fadeOut(menuElement, 0);

			if (customMenuNavInner) {
				removeCustomClass(customMenuNavInner);
			}
		}
	}

	dataMenuItems.forEach(li => {
		li.addEventListener('mouseover', function() {
			removeClassInArray(dataMenuItems, activeClass);
			addCustomClass(this, activeClass);

			const activeTrigger = document.querySelector(`[data-trigger].${activeClass}`);
			if (!activeTrigger) return;

			const activeTriggerRect = activeTrigger.getBoundingClientRect();
			const liRect = this.getBoundingClientRect();

			const distance = liRect.top - activeTriggerRect.top;

			distance < 0 ?
					addCustomClass(this, 'to_top') :
					removeCustomClass(this, 'to_top')
			document.documentElement.style.setProperty('--border-height', `${distance}px`);
		});
	});

	document.addEventListener('mouseover', function(event) {
		let target = event.target;
		let triggerElement = target.closest('[data-trigger]');
		if (!triggerElement) return;

		const menuValue = triggerElement.getAttribute('data-trigger');
		const menuElement = document.querySelector(`[data-menu="${menuValue}"]`);
		const customMenuNavInner = document.querySelector('.custom-menu__nav-inner');

		if (currentActiveMenu && currentActiveMenu !== menuElement) {
			closeMenu(currentActiveMenu);
		}

		if (!menuElement.classList.contains(activeClass)) {
			addCustomClass(menuElement);
			fadeIn(menuElement, 400, 200, 'flex');
			addCustomClass(triggerElement);

			if (customMenuNavInner) {
				addCustomClass(customMenuNavInner);
			}
			currentActiveMenu = menuElement;
		}
	});

	document.addEventListener('mouseout', function(event) {
		let triggerElement = event.target.closest('[data-trigger]');
		if (!triggerElement) return;

		let relatedTarget = event.relatedTarget;
		let isLeavingForAnotherTrigger = relatedTarget && relatedTarget.closest('[data-trigger]');
		let isLeavingForMenuElement = relatedTarget && relatedTarget.closest(`[data-menu="${triggerElement.getAttribute('data-trigger')}"]`);
		let isLeavingForCustomMenuNavInner = customMenuNavInner && customMenuNavInner.contains(relatedTarget);

		if (!isLeavingForAnotherTrigger && !isLeavingForMenuElement && !isLeavingForCustomMenuNavInner) {
			closeMenu(currentActiveMenu);
			currentActiveMenu = null;
		}
	});

	if (customMenuNavInner) {
		customMenuNavInner.addEventListener('mouseout', function(event) {
			let isLeavingTo = event.relatedTarget;
			let isLeavingToAnotherMenuPart = isLeavingTo && (customMenuNavInner.contains(isLeavingTo) || isLeavingTo.closest('[data-trigger]'));

			if (!isLeavingToAnotherMenuPart) {
				const allItems = document.querySelectorAll(`.${activeClass}[data-trigger], .${activeClass}[data-menu], [data-menu] li.${activeClass}, .custom-menu__nav-inner.${activeClass}`);
				if (document.querySelector('.active[data-menu]')) {
					fadeOut(document.querySelector(`.${activeClass}[data-menu]`), 0);
				}
				removeClassInArray(allItems, activeClass);
			}
		});
	}

	document.addEventListener('mouseout', function(event) {
		let triggerElement = event.target.closest('[data-trigger]');
		if (!triggerElement) return;
		let isLeavingTo = event.relatedTarget;

		if (isLeavingTo && (triggerElement.contains(isLeavingTo) || triggerElement === isLeavingTo)) {
			return;
		}

		const menuValue = triggerElement.getAttribute('data-trigger');
		const menuElement = document.querySelector(`[data-menu="${menuValue}"]`);
		const customMenuNavInner = document.querySelector('.custom-menu__nav-inner');

		let isLeavingToCustomMenuNavInner = customMenuNavInner && customMenuNavInner.contains(isLeavingTo);
		let isLeavingToAnotherTrigger = isLeavingTo && isLeavingTo.closest('[data-trigger]');

		if (!isLeavingToCustomMenuNavInner && !isLeavingToAnotherTrigger) {
			if (menuElement) {
				removeCustomClass(triggerElement, activeClass)
				removeCustomClass(menuElement, activeClass)

				fadeOut(menuElement, 0)
			}
			if (customMenuNavInner) {
				removeCustomClass(customMenuNavInner, activeClass)
			}
		}
	});
}

function initMobileMenu() {
	dataTrigger.forEach(item => {
		item.addEventListener('click', function (){
			const parrentList = item.parentNode;
			const currentMenu = customMenuNavInner.querySelector(`[data-menu=${this.dataset.trigger}]`)
			addCustomClass(customMenuNavInner, activeClass);
			fadeOut(parrentList,0);
			fadeIn(currentMenu, 300, 0, 'flex');
		})
	})

	backBtn.forEach(btn => {
		btn.addEventListener('click', function (){
			const currentList = customMenuNavInner.previousElementSibling;
			allMenus.forEach(item => {
				fadeOut(item,0);
			})
			removeCustomClass(customMenuNavInner, activeClass);
			fadeIn(currentList, 300, 0, 'flex');


		})
	})
}

function checkWindowSize() {
	if (window.innerWidth > 1024) {
		initDesktopMenu()
	} else {
		initMobileMenu()
	}
}

// Проверить размер окна при загрузке страницы
checkWindowSize();

// Отслеживать изменение размера окна
window.addEventListener('resize', checkWindowSize);














