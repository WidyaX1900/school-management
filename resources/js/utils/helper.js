const $h = {
    Modal: {
        show: (modal) => {
            modal.classList.remove("translate-y-[100%]");
            modal.classList.remove("opacity-0");
        },

        hide: (modal) => {
            modal.classList.add("translate-y-[100%]");
            modal.classList.add("opacity-0");
        }
    }
};

export default $h;
