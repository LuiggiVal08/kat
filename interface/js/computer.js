import { formatInput, useState, validInput, notification, validData, fetchAPI, redirect } from "./modules/global.js";

document.getElementById('btn-volver-header').addEventListener('click', ()=>{
    redirect('home')
})