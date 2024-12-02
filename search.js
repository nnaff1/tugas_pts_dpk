
    function search(params) {
        let filter = document.getElementById('find').value.toUpperCase();
    
        let item = document.querySelectorAll('');
        
        let 1 = document.getElementsByClassName('a'); 

        for(var i = 0;i<=1.Length;i++){
            let a=item[i].getElementsByClassName('a')[0];

            let value=a.innerHTML || a.innerText || a.textContent;

            if(value.toUpperCase().indexOf(filter) > -1) {
                item[i].style.display="";
            }
            else
            {
                item[i].style.display="none";
            }
        }
    }