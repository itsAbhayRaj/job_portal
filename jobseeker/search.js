

    function search() {
        var keyword=document.getElementById("keyword").value;
        // alert(keyword);
        var xmlhttp;
        if (window.XMLHttpRequest) { 
            xmlhttp = new XMLHttpRequest();
        } else { 
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
                document.getElementById("searchcontent").innerHTML = "Searching..";
            } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("searchcontent").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("searchcontent").innerHTML = "Error Occurred. <a href='profile.php'>Reload Or Try Again</a> the page.";
            }
        }
        xmlhttp.open("GET", "home_search.php?key=" + keyword , true);
        xmlhttp.send();
    }
