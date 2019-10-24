

    function showAlert(classname, message)

    {
        const div = document.querySelector('#demo');
        const a = div.className = `alert alert-${classname}`;
        const b = div.appendChild(document.createTextNode(message));
        const c = setTimeout(() => document.querySelector('.alert').remove(),3000);
        return(a,b);
        //deleting in 3 seconds

        
    }

    function go(){
        setTimeout("location.href = 'records.php';",3000);
    }