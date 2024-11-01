function initTripsTab($scope, $) {

    class Tabs {
        constructor(groupNode) {
            this.tablistNode = groupNode;

            this.tabs = [];

            this.firstTab = null;
            this.lastTab = null;

            this.tabs = Array.from(this.tablistNode.querySelectorAll('[role=tab]'));
            this.tabpanels = [];

            this.tabs.map((tab) => {
                let tabpanel = document.getElementById(tab.getAttribute('aria-controls'));;

                tab.tabIndex = -1;
                tab.setAttribute('aria-selected', 'false');
                this.tabpanels.push(tabpanel);

                tab.addEventListener('keydown', this.onKeydown.bind(this));
                tab.addEventListener('click', this.onClick.bind(this));

                if (!this.firstTab) {
                    this.firstTab = tab;
                }
                this.lastTab = tab;
            })

            this.setSelectedTab(this.firstTab, false);
        }

        setSelectedTab(currentTab, setFocus) {
            if (typeof setFocus !== 'boolean') {
                setFocus = true;
            }

            for (let i = 0; i < this.tabs.length; i += 1) {
                let tab = this.tabs[i];
                if (currentTab === tab) {
                    tab.setAttribute('aria-selected', 'true');
                    tab.removeAttribute('tabindex');
                    this.tabpanels[i].classList.remove('is-hidden');
                    if (setFocus) {
                        tab.focus();
                    }
                } else {
                    tab.setAttribute('aria-selected', 'false');
                    tab.tabIndex = -1;
                    this.tabpanels[i].classList.add('is-hidden');
                }
            }
        }

        setSelectedToPreviousTab(currentTab) {
            let index;

            if (currentTab === this.firstTab) {
                this.setSelectedTab(this.lastTab);
            } else {
                index = this.tabs.indexOf(currentTab);
                this.setSelectedTab(this.tabs[index - 1]);
            }
        }

        setSelectedToNextTab(currentTab) {
            let index;

            if (currentTab === this.lastTab) {
                this.setSelectedTab(this.firstTab);
            } else {
                index = this.tabs.indexOf(currentTab);
                this.setSelectedTab(this.tabs[index + 1]);
            }
        }

        /* EVENT HANDLERS */

        onKeydown(event) {
            let tgt = event.currentTarget,
                flag = false;

            switch (event.key) {
                case 'ArrowLeft':
                    this.setSelectedToPreviousTab(tgt);
                    flag = true;
                    break;

                case 'ArrowRight':
                    this.setSelectedToNextTab(tgt);
                    flag = true;
                    break;

                case 'Home':
                    this.setSelectedTab(this.firstTab);
                    flag = true;
                    break;

                case 'End':
                    this.setSelectedTab(this.lastTab);
                    flag = true;
                    break;

                default:
                    break;
            }

            if (flag) {
                event.stopPropagation();
                event.preventDefault();
            }
        }

        onClick(event) {
            this.setSelectedTab(event.currentTarget);
        }
    }

    const tablists = document.querySelectorAll('[role=tablist].wpte-trips-tab__nav');

    tablists.forEach((tablist) => {
        new Tabs(tablist);
    });

    let swiperContainers = document.querySelectorAll('.wpte-trips-tab__swiper');

    swiperContainers.forEach((swiperContainer) => {
        if (swiperContainer) {
            let nextEl = swiperContainer.parentElement.querySelector('.tab-btn-next')
            let prevEl = swiperContainer.parentElement.querySelector('.tab-btn-prev')
            let paginationEl = swiperContainer.parentElement.querySelector('.tab-page')
            let options = Object.assign({
                navigation: {
                    nextEl: nextEl || '.tab-btn-next',
                    prevEl: prevEl || '.tab-btn-prev',
                },
                pagination: {
                    el: paginationEl || '.tab-page',
                    type: 'bullets',
                    clickable: true
                },
            }, swiperContainer.dataset.swiperOptions ? JSON.parse(swiperContainer.dataset.swiperOptions) : {})
            new elementorFrontend.utils.swiper(swiperContainer, options)
            //On changing the tabs, destroy the swiper and reinitialize it
            tablists.forEach((tablist) => {
                tablist.addEventListener('click', (event) => {
                    swiperContainer.swiper.destroy();
                    new elementorFrontend.utils.swiper(swiperContainer, options)
                });
            });
        }
    })

}

jQuery(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
        "frontend/element_ready/wptravelengine-trips-tab.default",
        initTripsTab
    );
});
