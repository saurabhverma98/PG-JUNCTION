let theme = document.body.getElementsByClassName('theme')[0];
// console.log(theme);

let lightBtn =theme.getElementsByClassName('light-btn');
lightBtn = Array.from(lightBtn);
// console.log(lightBtn);

let darkBtn = theme.getElementsByClassName('dark-btn');
// console.log(darkBtn);

function ApplyLightTheme(){
    if(document.body.classList.contains('dark-theme')){
        document.body.classList.remove('dark-theme');
    }
}

function ApplyDarkTheme(){
    if(document.body.classList.contains('light-theme')){
        document.body.classList.remove('light-theme');
    }else{
        document.body.classList.add('dark-theme');
    }
}