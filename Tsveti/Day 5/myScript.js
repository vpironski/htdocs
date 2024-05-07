//connect bg

let data = [
    {
        path: "pictures/pic1.jpg",
        description: "Lorem Ipsum is simply dummy text of 1........"
    },
    {
        path: "pictures/pic2.jpg",
        description: "Lorem Ipsum is simply dummy text of 2........"
    },
    {
        path: "pictures/pic3.jpg",
        description: "Lorem Ipsum is simply dummy text of 3........"
    },
    {
        path: "pictures/pic3.jpg",
        description: "Lorem Ipsum is simply dummy text of 3........"
    },
    {
        path: "pictures/pic3.jpg",
        description: "Lorem Ipsum is simply dummy text of 3........"
    },
    {
        path: "pictures/pic2.jpg",
        description: "Lorem Ipsum is simply dummy text of 3........"
    },
    {
        path: "pictures/pic1.jpg",
        description: "Lorem Ipsum is simply dummy text of 34444........"
    },
]

let result = "";
for(let i = 0; i < data.length; i++){
    let currentELement = data[i]
    result += "<div class=\"enimalBox\">"
    result +=   "<img src=" + currentELement.path + ">"
    result +=   "<p>" + currentELement.description + "</p>"
    result += "</div>"
    console.log(result)
}
let mainDiv = document.getElementById("main")
mainDiv.innerHTML = result