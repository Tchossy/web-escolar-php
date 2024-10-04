const origin_url = window.location.origin

const containerCourse = document.getElementById('containerCourse')

const listCourse = () => {
  return new Promise((resolve, reject) => {
    fetch(`${origin_url}/course/get/all`)
      .then(response => {
        if (!response.ok) {
          reject(`Erro: ${response.status}`)
        }
        return response.json()
      })
      .then(data => {
        resolve(data)
      })
      .catch(error => {
        reject(`Erro de rede: ${error}`)
      })
  })
}

listCourse()
  .then(response => {
    console.log(response.data)
    if (response.data) {
      containerCourse.innerHTML = response.data
        .map(course => {
          // Usando a imagem (ou pode iterar sobre todas)
          let firstImage =
            course.image_course > ''
              ? course.image_course
              : `${origin_url}/base/assets/img/default-image.jpg`

          return `
            <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
              <article class="post">
                <figure class="feature-image">
                  <img src="${firstImage}" alt="${course.title_course}" />
                </figure>
                <div class="entry-content">
                  <h4>
                    <a href="ensinos-medio/details/${course.id}">${course.title_course}</a>
                  </h4>

                  <div class="author-content">
                    <h6 class="author-name title-dots">
                      ${course.description_course}
                    </h6>
                  </div>
                  <div class="entry-meta">
                    <span class="student-number">
                      <i aria-hidden="true" class="fas fa-clock"></i>
                      ${course.years} anos
                    </span>
                    <a href="ensinos-medio/details/${course.id}">
                      Detalhes do curso
                      <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                    </a>
                  </div>
                </div>
              </article>
            </div>
          `
        })
        .join('')
    } else {
      containerCourse.innerHTML = '<p>Nenhum curso disponível no momento.</p>'
    }
  })
  .catch(error => {
    console.error(error)
    containerCourse.innerHTML = `<p>Erro ao carregar os cursos: ${error}</p>`
  })
