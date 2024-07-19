function BackButton() {
    document.getElementById('Form').style.display = 'none';
    document.getElementById('AdminForm').style.display = 'none';
    document.getElementById('StudentForm').style.display = 'none';
    document.getElementById('RegisterFormGroup').style.display = 'none';
    document.getElementById('Login-Selection').style.display = 'flex';
    document.getElementById('AdminForm').reset();
    document.getElementById('StudentForm').reset();
    document.getElementById('RegisterForm').reset();
}

function AdminForm() {
    document.getElementById('Login-Selection').style.display = 'none';
    document.getElementById('RegisterFormGroup').style.display = 'none';
    document.getElementById('StudentForm').style.display = 'none';
    document.getElementById('Form').style.display = 'flex';
    document.getElementById('AdminForm').style.display = 'flex';
}

function StudentForm() {
    document.getElementById('Login-Selection').style.display = 'none';
    document.getElementById('RegisterFormGroup').style.display = 'none';
    document.getElementById('AdminForm').style.display = 'none';
    document.getElementById('Form').style.display = 'flex';
    document.getElementById('StudentForm').style.display = 'flex';
}

function RegisterForm() {
    document.getElementById('Login-Selection').style.display = 'none';
    document.getElementById('Form').style.display = 'none';
    document.getElementById('AdminForm').style.display = 'none';
    document.getElementById('StudentForm').style.display = 'none';
    document.getElementById('RegisterFormGroup').style.display = 'flex';
}

function ShowPassword() {
    var get_studentpass = document.getElementById('student-passwordfield');
    var get_adminpass = document.getElementById('admin-passwordfield');

    if(get_studentpass.type == "password") {
        get_studentpass.type = "text";
    } else {
        get_studentpass.type = "password";
    }

    if(get_adminpass.type == "password") {
        get_adminpass.type = "text";
    } else {
        get_adminpass.type = "password";
    }
}

