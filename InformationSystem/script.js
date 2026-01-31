$(document).on('click','#btnDelete', function (e)
{
    e.preventDefault();
    if(confirm("Are you sure to delete this item?")){
        console.log("Sumakses syaaaaa!!!!");
    }
});