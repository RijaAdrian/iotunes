
export const fetchApi = async function(url, options = {}) {
    let response = await fetch(url, {
        credentials: 'same-origin',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'application/json',
            'Content-Type' : 'application/json'
        },
        ...options
    })
    if(response.ok) {
        return response.json()
    } else {
        throw await response.json()
    }
}