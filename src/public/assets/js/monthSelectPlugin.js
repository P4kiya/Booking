// monthSelectPlugin.js

function monthToStr(monthIndex, shorthand, l10n) {
    const monthNames = shorthand ? l10n.months.shorthand : l10n.months.longhand;
    return monthNames[monthIndex];
}

function clearNode(node) {
    while (node.firstChild) {
        node.removeChild(node.firstChild);
    }
}

function getEventTarget(event) {
    return event.target || event.srcElement;
}

function monthSelectPlugin(pluginConfig) {
    const config = {
        shorthand: false,
        dateFormat: "F Y",
        altFormat: "F Y",
        theme: "light",
        ...pluginConfig,
    };

    return (fp) => {
        fp.config.dateFormat = config.dateFormat;
        fp.config.altFormat = config.altFormat;

        const self = {
            monthsContainer: null,
        };

        function clearUnnecessaryDOMElements() {
            if (!fp.rContainer) return;
            clearNode(fp.rContainer);
            for (let index = 0; index < fp.monthElements.length; index++) {
                const element = fp.monthElements[index];
                if (!element.parentNode) continue;
                element.parentNode.removeChild(element);
            }
        }

        function build() {
            if (!fp.rContainer) return;
            self.monthsContainer = fp._createElement("div", "flatpickr-monthSelect-months");
            self.monthsContainer.tabIndex = -1;
            buildMonths();
            fp.rContainer.appendChild(self.monthsContainer);
            fp.calendarContainer.classList.add(`flatpickr-monthSelect-theme-${config.theme}`);
        }

        function buildMonths() {
            if (!self.monthsContainer) return;
            clearNode(self.monthsContainer);
            const frag = document.createDocumentFragment();
            for (let i = 0; i < 12; i++) {
                const month = fp.createDay("flatpickr-monthSelect-month", new Date(fp.currentYear, i), 0, i);
                month.textContent = monthToStr(i, config.shorthand, fp.l10n);
                month.addEventListener("click", selectMonth);
                frag.appendChild(month);
            }
            self.monthsContainer.appendChild(frag);
        }

        function selectMonth(e) {
            e.preventDefault();
            const eventTarget = getEventTarget(e);
            if (!(eventTarget instanceof Element)) return;
            if (eventTarget.classList.contains("flatpickr-disabled")) return;
            setMonth(eventTarget.dateObj);
        }

        function setMonth(date) {
            const selectedDate = new Date(fp.currentYear, date.getMonth(), date.getDate());
            fp.setDate(selectedDate, true);
        }

        return {
            onReady: [clearUnnecessaryDOMElements, build],
            onDestroy: [clearUnnecessaryDOMElements],
        };
    };
}

// Make the plugin globally accessible
window.monthSelectPlugin = monthSelectPlugin;