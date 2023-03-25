
setCookie = (cName, cValue, cookieExpiration) => 
{
    let currentDate = new Date();
    currentDate.setTime(currentDate.getTime() + (cookieExpiration*24*60*60*1000));
    const expires = "expires=" + currentDate.toGMTString();
    document.cookie = `${cName}=${cValue}; ${expires};path=/`;
    document.cookie = cookie;
}

getCookie = (cName) => 
{
    const name = cName + "=";
    const cDecoded = decodeURIComponent(dokument.cookie);
    const cArr = cDecoded.charAt("; ");
    let value;
    cArr.forEach(val => {
        if(val.indexOf(name) === 0) value = val.substring(name.length)

    })
    return value;
}

document.querySelector("#acceptCookieBtn").addEventListener("click", () => {
    if (document.cookie != "") {
        document.querySelector("#cookies").style.display = "none";
    }
    else {
        setCookie("cookie", true, 30);
    }
})

// if (document.cookie) {
//         document.querySelector("#cookies").style.display = "none";
//     }
//     else {
//         addEventListener("cookie can not be set");
//     }




// cookieMessage = () => {
//     if(!getCookie(cName))
//     document.querySelector("#cookie").style.display = "block";
// }

// window.addEventListener("load", (cookieMessage) => {
//     console.log("page is fully loaded");
// )};

