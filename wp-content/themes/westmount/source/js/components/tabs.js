import {
    removeClassInArray,
    addCustomClass,
    toggleCustomClass,
} from "../functions/customFunctions";
import vars from "../_vars";
import {accInit} from "./accordion";

const { tabsParrents, accParrents } = vars;

// --------------- tabs custom function --------------- //
const tabsFunction = function (
    tabsDataInitArray,
    tabsNavAttr,
    tabsContentAttr,
    active = "active"
) {
    tabsDataInitArray &&
    tabsDataInitArray.forEach((tabParent) => {
        if (tabParent) {
            const tabNav = [...tabParent.querySelectorAll(`[${tabsNavAttr}]`)];
            const tabContent = [
                ...tabParent.querySelectorAll(`[${tabsContentAttr}]`),
            ];

            tabNav.map((nav) => {
                nav.addEventListener("click", (e) => {
                    e.preventDefault();

                    // accInit(accParrents, "data-id", "data-content");

                    const activeTabAttr = e.target.getAttribute(`${tabsNavAttr}`);
                    removeClassInArray(tabNav, active);
                    removeClassInArray(tabContent, active);
                    addCustomClass(
                        tabParent.querySelector(`[${tabsNavAttr}="${activeTabAttr}"]`),
                        active
                    );
                    addCustomClass(
                        tabParent.querySelector(
                            `[${tabsContentAttr}="${activeTabAttr}"]`
                        ),
                        active
                    );
                });
            });
        }
    });
};

tabsFunction(tabsParrents, "data-tab", "data-tab-content");



