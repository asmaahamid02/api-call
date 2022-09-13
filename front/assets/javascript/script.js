const check_password = async (formData) => {
  try {
    const res = await axios.post(
      'http://localhost/api-call/api/strong_pass_api.php',
      formData
    )
    return res.data
  } catch (error) {
    console.log('error', error.response)
  }
}

const check_palindrome = async (string) => {
  let api_url = `http://localhost/api-call/api/is_palindrome_api.php/?string=${string}`

  try {
    const res = await axios.get(api_url)
    return res.data
  } catch (error) {
    console.log('error', error.response)
  }
}

let form_password = document.querySelector('#form-1')
let form_palindrome = document.querySelector('#form-2')

form_password.addEventListener('submit', (e) => {
  e.preventDefault()

  let formData = new FormData(form_password)
  check_password(formData).then((data) => console.log(data))
})

form_palindrome.addEventListener('submit', (e) => {
  e.preventDefault()

  let string = document.querySelector('#string').value
  check_palindrome(string).then((data) => console.log(data))
})
