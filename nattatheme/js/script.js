$(document).ready(function($){
    $('#accordion .card-header').on('click', function(e){
        //console.log('You have clicked on', e.target);
        
        var $target = $(e.target);
        var $card = $target.parents('.card'); // go upward to parents
        var $content = $card.find('.collapse'); // go down to a div box
        $content.collapse('toggle');
        
        // $(e.target).
    });

    /*
    $('#headingOne button'). on('click', function(e){
        alert('Toggle accordion element1');
        $('#collapseOne').collapse('toggle');
    });

    $('#headingTwo button'). on('click', function(e){
        alert('Toggle accordion element2');
        
        $('#collapseTwo').collapse('toggle');
    });

    $('#headingThree button'). on('click', function(e){
        alert('Toggle accordion element3');
        
        $('#collapseThree').collapse('toggle');
    });
*/
});