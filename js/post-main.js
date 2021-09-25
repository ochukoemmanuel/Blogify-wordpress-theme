// Quick Add Post Ajax
var quickAddButton = document.querySelector("#quick-add-button");

if(quickAddButton){
    quickAddButton.addEventListener("click", function(){
        var ourPostData = {
            "title": document.querySelector('.admin-quick-add [name="title"]').value,
            "content": document.querySelector('.admin-quick-add [name="content"]').value,
            "status": "publish"
        }

        var createPost = new XMLHttpRequest();
        createPost.open("POST", magicalData.siteURL + "/wp-json/wp/v2/posts");
        createPost.setRequestHeader("X-WP-Nonce", magicalData.nonce)
        createPost.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        createPost.send(JSON.stringify(ourPostData));
        createPost.onreadystatechange = function() {
            if (createPost.readyState == 4) {
                if (createPost.status == 201) {
                    alert("Published");
                    document.querySelector('.admin-quick-add [name="title"]').value = '';
                    document.querySelector('.admin-quick-add [name="content"]').value = '';
                } else {
                    alert("Error - try again.");
                }
            }
        }
    })
}