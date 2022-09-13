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

const check_password_fetch = async (formData) => {
  try {
    const res = await fetch(
      'http://localhost/api-call/api/strong_pass_api.php',
      {
        method: 'POST',
        headers: {
          Accept: 'application/json',
          'Content-Type': 'application/json',
        },
        body: formData,
      }
    )
    // const content = await res.json()
    return res
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
  check_password_fetch(formData).then((data) => console.log(data))
})

form_palindrome.addEventListener('submit', (e) => {
  e.preventDefault()

  let string = document.querySelector('#string').value
  check_palindrome(string).then((data) => console.log(data))
})

const asyncPostCall = async () => {
  try {
    const response = await fetch(
      'http://localhost/api-call/api/strong_pass_api.php',
      {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          // your expected POST request payload goes here
          password: 'passkjd',
        }),
      }
    )
    const data = await response.json()
    // enter you logic when the fetch is successful
    console.log(data)
  } catch (error) {
    // enter your logic for when there is an error (ex. error toast)

    console.log(error)
  }
}

asyncPostCall()
