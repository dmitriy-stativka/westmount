import vars from '../_vars';
import {
	addCustomClass,
	removeCustomClass,
	fadeIn,
	fadeOut,
	removeClassInArray
} from '../functions/customFunctions';


const showReviews = document.querySelector('.team');
const reviewsSection = document.querySelector('.team-list');

if (showReviews) {
	const reviewItems = [...showReviews?.querySelectorAll('.team-list__item')];
	const showMore = showReviews?.querySelector('.team__more');
	let initialValue = 3;

	const itemLenght = reviewItems.length;

	if (itemLenght >= initialValue ) {
		function showInitialItems(itemArray,count) {
			[...itemArray.slice(0, count)].map(function(initialItem){
				fadeIn(initialItem, 300, 0, 'flex')
			});
		}

		// reviewItems.map(function(reviewItem){
		// 	fadeOut(reviewItem, 0)
		// });
		showInitialItems(reviewItems,initialValue);


		showMore.addEventListener('click', function(e){
			e.preventDefault();
			initialValue += 3;
			initialValue >= itemLenght ?
					fadeOut(showMore, 0): '';
			showInitialItems(reviewItems,initialValue);
		});
	}


}

