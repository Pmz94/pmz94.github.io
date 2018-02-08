new Vue({
    el: '#appVue',
    data: {
        newKeep: '',
        lists: []
    },
    methods: {
        addKeep: function () {
            this.lists.push({ keep: this.newKeep, completed: false });
            this.newKeep = '';
        }
    }
});