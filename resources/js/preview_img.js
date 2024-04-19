const inputUrl = document.getElementById("image");

const imgPlaceholder = document.getElementById("placeholder-thumb");

const emptyImg =
    "https://t3.ftcdn.net/jpg/02/48/42/64/360_F_248426448_NVKLywWqArG2ADUxDq6QprtIzsF82dMF.jpg";

inputUrl.addEventListener("input", () => {
    const typedUrl = inputUrl.value;
    imgPlaceholder.src = typedUrl ? typedUrl : emptyImg;
});
