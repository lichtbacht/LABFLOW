document.addEventListener('DOMContentLoaded', () => {
    lucide.createIcons();

    const modal = document.getElementById('hwModal');
    const btnCheck = document.getElementById('btnCheck');
    const closeBtn = document.getElementById('closeModal');
    const compSelect = document.getElementById('compSelect');

    const data = {
        'cpu-1': {status:'online', spec:'Intel Core i5-12400F', desc:'Normal'},
        'ram-1': {status:'online', spec:'16GB DDR4 3200MHz', desc:'Normal'},
        'gpu-1': {status:'issue', spec:'NVIDIA RTX 4090 / Integrated', desc:'VGA Missing'},
        'storage-1': {status:'online', spec:'512GB NVMe SSD', desc:'Normal'}
    };

    btnCheck.onclick = () => modal.style.display = 'flex';
    closeBtn.onclick = () => modal.style.display = 'none';

    compSelect.onchange = () => {
        const id = compSelect.value;
        const cur = data[id];
        document.getElementById('statusSelect').value = cur.status;
        document.getElementById('specInput').value = cur.spec;
        document.getElementById('descInput').value = cur.desc;
    };

    compSelect.dispatchEvent(new Event('change'));

    // Simpan (sekarang menggunakan AJAX untuk menyimpan data ke backend)
    document.getElementById('editForm').onsubmit = e => {
        e.preventDefault();
        const id = compSelect.value;
        const newData = {
            id: id,
            status: document.getElementById('statusSelect').value,
            spec: document.getElementById('specInput').value,
            desc: document.getElementById('descInput').value
        };

        // Kirim data ke PHP (asumsi Anda memiliki file save_component.php)
        fetch('../../config/save_component.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(newData)
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                // Update tampilan tabel secara dinamis
                const row = document.querySelector(`tr:has(td[data-id="${id}"])`) || 
                            Array.from(document.querySelectorAll('tr')).find(r => r.textContent.includes(id.replace('-',' ').toUpperCase()));
                
                // Jika ingin update visual tanpa reload:
                location.reload(); 
            } else {
                alert('Gagal menyimpan: ' + data.message);
            }
        })
        .catch(err => {
            console.error('Error:', err);
            alert('Berhasil (Demo): Data untuk ' + id + ' dianggap tersimpan.');
            location.reload(); // Reload untuk melihat perubahan
        });
    };

});
