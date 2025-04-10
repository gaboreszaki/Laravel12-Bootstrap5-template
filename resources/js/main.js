// Import our custom CSS
import '../scss/styles.scss'

// Import all of Bootstrap's JS
import * as Popper from "@popperjs/core"
import * as bootstrap from 'bootstrap'
import {Tooltip, Toast, Popover} from 'bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.min.css';


document.querySelectorAll('[data-bs-toggle="popover"]')
    .forEach(popover => {
        new Popover(popover)
    })


let toastEList = document.querySelectorAll('.toast')
toastEList.forEach(function (toast){
    new Toast(toast).show()
})

