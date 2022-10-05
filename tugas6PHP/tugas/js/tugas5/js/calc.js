function hitung(opr) {
    let form = document.getElementById('calcForm'),
        a1 = parseFloat(form.angka1.value),
        a2 = parseFloat(form.angka2.value),
        tampil = form.hasil,
        total;

    if (isNaN(a1) || isNaN(a2)) return alert('Harap masukkan angka!');

    switch (opr) {
        case '+': total = a1 + a2; break;
        case '-': total = a1 - a2; break;
        case '*': total = a1 * a2; break;
        case '/': total = a1 / a2; break;
        case '^': total = Math.pow(a1, a2); break;
        default: break;
    }

    tampil.value = total;
}