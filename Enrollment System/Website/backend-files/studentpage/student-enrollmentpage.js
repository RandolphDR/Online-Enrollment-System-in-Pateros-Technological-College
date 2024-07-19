function button_click(id) {
    document.getElementById('button1').style.backgroundColor = '#DBDBDB';
    document.getElementById('button2').style.backgroundColor = '#DBDBDB';
    document.getElementById('button3').style.backgroundColor = '#DBDBDB';
    document.getElementById('button4').style.backgroundColor = '#DBDBDB';

    document.getElementById(id).style.backgroundColor = '#ABE9AA';
}

function course() {

    switch(document.getElementById('course').value) {

        case "bsit":
            document.getElementById('yearlevel').options[0].selected = true;
            document.getElementById('yearlevel').options[1].disabled = false;
            document.getElementById('yearlevel').options[2].disabled = false;
            document.getElementById('yearlevel').options[3].disabled = false;
            document.getElementById('yearlevel').options[4].disabled = false;
            break;
        case "bsoa":
            document.getElementById('yearlevel').options[0].selected = true;
            document.getElementById('yearlevel').options[1].disabled = false;
            document.getElementById('yearlevel').options[2].disabled = false;
            document.getElementById('yearlevel').options[3].disabled = false;
            document.getElementById('yearlevel').options[4].disabled = false;
            break;
        case "ccs":
            document.getElementById('yearlevel').options[0].selected = true;
            document.getElementById('yearlevel').options[1].disabled = false;
            document.getElementById('yearlevel').options[2].disabled = false;
            document.getElementById('yearlevel').options[3].disabled = true;
            document.getElementById('yearlevel').options[4].disabled = true;
            break;
        case "coa":
            document.getElementById('yearlevel').options[0].selected = true;
            document.getElementById('yearlevel').options[1].disabled = false;
            document.getElementById('yearlevel').options[2].disabled = false;
            document.getElementById('yearlevel').options[3].disabled = true;
            document.getElementById('yearlevel').options[4].disabled = true;
            break;
        case "chrm":
            document.getElementById('yearlevel').options[0].selected = true;
            document.getElementById('yearlevel').options[1].disabled = false;
            document.getElementById('yearlevel').options[2].disabled = false;
            document.getElementById('yearlevel').options[3].disabled = true;
            document.getElementById('yearlevel').options[4].disabled = true;
            break;

        default:
            document.getElementById('yearlevel').options[0].selected = true;
            document.getElementById('yearlevel').options[1].disabled = false;
            document.getElementById('yearlevel').options[2].disabled = false;
            document.getElementById('yearlevel').options[3].disabled = false;
            document.getElementById('yearlevel').options[4].disabled = false;
    }
    
}

function Show_Navigation() {
    
    if(document.getElementById('Navigation').style.display == 'none') {
        document.getElementById('Navigation').style.display = 'flex'
    } else {
        document.getElementById('Navigation').style.display = 'none'
    }
}