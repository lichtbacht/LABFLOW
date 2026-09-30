/* assets/js/stock_opname.js */
document.addEventListener('DOMContentLoaded', () => {
    lucide.createIcons();

    const stockCount = document.getElementById('stockCount');
    window.adjustStock = (val) => {
        let count = parseInt(stockCount.value) + val;
        if (count < 0) count = 0;
        stockCount.value = count;
    };

    document.getElementById('stockForm').onsubmit = (e) => {
        e.preventDefault();
        alert('Data Barang berhasil ditambahkan ke Inventaris!');
    };
});
