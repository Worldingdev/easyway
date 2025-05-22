import './bootstrap';
import 'datatables.net';
import "datatables.net-dt/css/dataTables.dataTables.min.css";
import "datatables.net-bs5/css/dataTables.bootstrap5.min.css";
import $ from "jquery";
import Toastify from 'toastify-js'
import 'toastify-js/src/toastify.css';

$(document).ready(function () {
    if ($("#tableColis").length) {
      $("#tableColis").DataTable();
    } else {
      console.error("La table avec l'ID 'example' n'existe pas !");
    }
  });