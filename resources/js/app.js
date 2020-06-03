require('./bootstrap');

jQuery(function ($) {
    // $('button.festival-detail').click((event) => {
    //     const id = event.target.dataset.festivalId;

    //     if (!id) {
    //         console.error(`The ID does not exist on the element dataset!`, event.target);
    //         return;
    //     }

    //     axios.get(`/festivals/${id}`)
    //         .then(response => response.data)
    //         .then(console.log)
    //         .catch(console.error);
    // })

    $('#staticBackdrop').on('show.bs.modal', function (event) {
        var details = $(event.relatedTarget).siblings('div.festival-detail').first().html();

        if (!details) {
            console.error(`The sibling of the relatedTarget does not have details!`, event.relatedTarget);
        }

        $(this).find('.modal-content').html(details);
    })
});
