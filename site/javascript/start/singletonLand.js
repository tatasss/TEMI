let SingletonLand = (function () {
    let instance;

    function createInstance() {
        return new Land();
    }

    return {
        getInstance: function () {
            if (!instance) {
                instance = createInstance();
            }
            return instance;
        }
    };
})();


let land=SingletonLand.getInstance();
