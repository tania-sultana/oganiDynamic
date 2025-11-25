// -------shoppig cart quantity and total price------------
document.addEventListener('DOMContentLoaded', () => {
    function updateCartTotals() {
        let subtotal = 0;
        document.querySelectorAll('.total-price').forEach(rowTotal => {
            let priceText = rowTotal.textContent.replace('$', '').replace(/,/g, '');
            subtotal += parseFloat(priceText);
        });
        document.querySelector('#subtotal').textContent = '$' + subtotal.toFixed(2);
        document.querySelector('#total').textContent = '$' + subtotal.toFixed(2);
    }

    // Quantity increment/decrement code
    document.querySelectorAll('.quantity').forEach(qtyDiv => {
        const decBtn = qtyDiv.querySelector('.dec-qty');
        const incBtn = qtyDiv.querySelector('.inc-qty');
        const qtyP = qtyDiv.querySelector('.qty');
        const price = parseFloat(qtyP.dataset.price);
        const totalPriceP = qtyDiv.closest('tr').querySelector('.total-price');

        incBtn.addEventListener('click', () => {
            let qty = parseInt(qtyP.textContent);
            qty += 1;
            qtyP.textContent = qty;
            totalPriceP.textContent = '$' + (price * qty).toFixed(2);
            updateCartTotals();
        });

        decBtn.addEventListener('click', () => {
            let qty = parseInt(qtyP.textContent);
            if (qty > 1) qty -= 1;
            qtyP.textContent = qty;
            totalPriceP.textContent = '$' + (price * qty).toFixed(2);
            updateCartTotals();
        });
    });
    updateCartTotals();
});


  // -----------tab section description informathion reviews section------------
  const tabs = document.querySelectorAll('.tab');
  const contents = document.querySelectorAll('.tab-content');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      contents.forEach(c => c.classList.remove('active'));
      tab.classList.add('active');
      document.getElementById(tab.dataset.tab).classList.add('active');
    });
  });
