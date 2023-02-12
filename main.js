async function getPosts() {
    let res = await fetch('https://jsonplaceholder.typicode.com/posts');
    let posts = await res.json();

    posts.forEach((post) => {
        document.querySelector('.col-md-6').innerHTML += `

        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0">${post.title}</h3>
                <div class="mb-1 text-muted mt-2">12 Ноября</div>
                <p class="card-text mb-auto">${post.body}</p>
                <a href="#" class="stretched-link">Продолжить чтение</a>
            </div>
        </div>
        
        `
    });
}

getPosts();
