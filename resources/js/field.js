Nova.booting((Vue, router, store) => {
    Vue.component('index-nova-detail-link', require('./components/IndexField'))
    Vue.component('index-nova-edit-link', require('./components/IndexEditField'))
})
