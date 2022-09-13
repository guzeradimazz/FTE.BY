document.addEventListener('DOMContentLoaded', () => {
    const form3 = document.getElementById('callForm2')
    form3.addEventListener('submit', formSend3)

    async function formSend3(e) {
        e.preventDefault()
        let error = formValidate(form3)

        if (error) {
            alert('Заполните все поля!')
        }
    }

    function formValidate(form) {
        let error = 0
        let formReq = document.querySelectorAll('._req3')

        for (let i = 0; i < formReq.length; i++) {
            const input = formReq[i]

            formRemErr(input)

            if (
                input.getAttribute('type') === 'checkbox' &&
                input.checked === false
            ) {
                formAddErr(input)
                error++
            } else if (input.value.trim() === '') {
                formAddErr(input)
                error++
            }
        }
        return error
    }

    function formAddErr(input) {
        input.classList.add('_error')
    }
    function formRemErr(input) {
        input.classList.remove('_error')
    }
})
