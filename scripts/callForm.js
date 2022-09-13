document.addEventListener('DOMContentLoaded', () => {
    const form2 = document.getElementById('callForm')
    form2.addEventListener('submit', formSend2)

    async function formSend2(e) {
        e.preventDefault()
        let error = formValidate(form2)

        if (error) {
            alert('Заполните все поля!')
        }
    }

    function formValidate(form) {
        let error = 0
        let formReq = document.querySelectorAll('._req2')

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
