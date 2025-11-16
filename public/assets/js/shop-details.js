// -----------------inc and dec value------------------
const dec = document.querySelector('.dec-qty');
  const inc = document.querySelector('.inc-qty');
  const qtyDisplay = document.querySelector('.qty');

  dec.addEventListener('click', () => {
    let qty = parseInt(qtyDisplay.textContent);
    if (qty > 1) qtyDisplay.textContent = qty - 1;
  });

  inc.addEventListener('click', () => {
    let qty = parseInt(qtyDisplay.textContent);
    qtyDisplay.textContent = qty + 1;
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