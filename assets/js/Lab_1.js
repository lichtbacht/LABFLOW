document.addEventListener('DOMContentLoaded', () => {
    console.log('Lab 1 Layout Loaded');
    
    // Add hover effects or dynamic interactions here
    const pcStations = document.querySelectorAll('.pc-station');
    
    pcStations.forEach(station => {
        station.addEventListener('mouseenter', () => {
            station.style.opacity = '0.8';
        });
        station.addEventListener('mouseleave', () => {
            station.style.opacity = '1';
        });
    });
});
