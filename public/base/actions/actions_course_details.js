const urlParams = new URLSearchParams(window.location.search)
const path = window.location.pathname // Obtém o caminho da URL

const getCourseIdFromUrl = () => {
  const segments = path.split('/') // Divide a URL em partes
  return segments[segments.length - 1] // Retorna o último segmento, que é o ID
}

const courseId = getCourseIdFromUrl() // Pega o ID do course

const getCourseDetails = async id => {
  try {
    const response = await fetch(`/course/get/one/${id}`)
    const data = await response.json()

    if (response.ok) {
      // Usando a imagem (ou pode iterar sobre todas)
      let firstImage =
        data.image_course > ''
          ? data.image_course
          : `${origin_url}/base/assets/img/default-image.jpg`

      console.log(document.getElementById('image-course').src)

      // Atualizando os detalhes no HTML
      document.getElementById('image-course').src = `${firstImage}`
      document.getElementById('title_course').textContent = data.title_course

      // Substituir as quebras de linha por parágrafos
      const formattedDescription = data.description_course
        .split('\n')
        .map(paragraph => `<p>${paragraph}</p>`)
        .join('')
      // Inserir no HTML
      document.getElementById('description_course').innerHTML =
        formattedDescription

      document.getElementById('years').textContent = data.years
      document.getElementById('period').textContent = data.period
      document.getElementById('monthly_course').textContent =
        data.monthly_course

      // Substituir as quebras de linha por parágrafos
      const formattedStructure = data.course_structure
        .split('\n')
        .map(paragraph => `<li>${paragraph}</li>`)
        .join('')
      // Inserir no HTML
      document.getElementById('course_structure').innerHTML = formattedStructure

      // Substituir as quebras de linha por parágrafos
      const formattedRequerements = data.requerements
        .split('\n')
        .map(paragraph => `<li>${paragraph}</li>`)
        .join('')

      document.getElementById('span-requirement').textContent = `
          Esses são os requisitos necessários para
          ingressar no curso de ${data.title_course}. É
          importante atender a todos os critérios
          listados abaixo para garantir a sua vaga:
        `
      // Inserir no HTML
      document.getElementById('requerements').innerHTML = formattedRequerements

      // Substituir as quebras de linha por parágrafos
      const formattedHowToApply = data.how_to_apply
        .split('\n')
        .map(
          paragraph => `
          <div>
            <i aria-hidden="true" class="fas fa-minus"></i>
          <i class="list-txt">${paragraph}</i>
          </div>
        `
        )
        .join('')
      // Inserir no HTML
      document.getElementById('how_to_apply').innerHTML = formattedHowToApply

      document.getElementById('faq').textContent = data.faq
    } else {
      console.error('Erro ao carregar os detalhes:', data.message)
    }
  } catch (error) {
    console.error('Erro ao buscar detalhes:', error)
  }
}

// Carregar os detalhes
getCourseDetails(courseId)

const currentUrl = window.location.href
const postTitle = document.querySelector('.inner-title').textContent
