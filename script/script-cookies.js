let acceptCookieBtn = document.getElementById("acceptCookieBtn");
acceptCookieBtn.onclick= function(){
    setCookie(cookies, value, cookieExpiration);
}

let deleteCookieBtn = document.getElementById("deleteCookieBtn");
deleteCookieBtn.addEventListener("click", () => {
    cookies.value = deleteCookie("cookies");
});

function showCookies() {
    const output = document.getElementById("cookies");
    output.textContent = `> ${document.cookie}`;
}


function setCookie(cookies, value, cookieExpiration)
{
    let currentDate = new Date();
    currentDate.setTime(currentDate.getTime() + (cookieExpiration*24*60*60*1000));
    let expires = "expires=" + currentDate.toGMTString();
    document.cookie = `${cookies}=${value}; ${expires};path=/`;
    if(document.cookie)
    {
        document.getElementById("cookie__popup").style.display = "none";
    }else
    {   
        document.getElementById("cookie__popup").style.display;
        alert("Unable to set cookie. Please allow all cookies site from cookie setting of your browser");
    }
}

function deleteCookie(cookies) 
{
    setCookie(cookies, null, null);
}

function getCookie(cookies)
{
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split("; ");
    let result = null;
    
    ca.forEach(element => {
        if(element.indexOf(cookies) == 0){
            result = element.substring(cookies.lenght + 1)
        }
    })
    return result;
    
}

function checkCookie()
{
    let check = getCookie("cookies");
    if(check != ""){
        document.getElementById("cookie__popup").style.display;
    }else{
        document.getElementById("cookie__popup").style.display = "none";
        if (check != "" && check != null) {
            setCookie("cookies", value, 365);
        }
    }
}
checkCookie();