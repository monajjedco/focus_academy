/**
 * Created by adaroobi on 8/29/16.
 */

// store any loaded tab for caching purposes.
var loadedTabs = [];

// trigger once the right tab clicked!
$('[data-toggle="remoteTab"]').click(function (e) {

    // get the loading container
    var tabLoading = $('#tabLoading').hide();

    // get and store info of clicked tab
    var $this = $(this),
        loadURL = $this.attr('href'),
        targetElement = $this.attr('data-target');

    if (loadedTabs.indexOf(targetElement) === -1) {
        tabLoading.show(100);

        // percentage of completion for progress bar
        var progress = '100%';

        // put progress bar into container.
        $(tabLoading).append('<div class="progress progress-xlg progress-striped active"><div class="progress-bar progress-bar-warning" id="bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%"><span class="sr-only">0% Complete</span></div></div>');

        // Animate the #bar div
        $('#bar').animate({
            width: progress
        }, 100);

        // load content of requested URL you can append to display like refresh btn or sth.
        $(targetElement).load(loadURL, {viewType:'tab'}, function () {
            // show the content of clicked tab
            $this.tab('show');

            // store that this tab was loaded
            loadedTabs.push(targetElement);

            // hide the loading container
            tabLoading.hide(100);
        });
    } else if (!$(targetElement).hasClass('active')) {
        // nothing new just show the cached tab content
        $this.tab('show');
    }

    return false;
});

// Modal Related..
function resize_modal(size) {

    var validSizes = ['', 'lg', 'md', 'sm'];

    if (!validSizes.indexOf(size)) return false;

    $('#modal > .modal-dialog').removeClass('modal-lg').removeClass('modal-md').removeClass('modal-sm').addClass('modal-' + size);

}