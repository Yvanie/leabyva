// Changez la date ici (Année, Mois-1, Jour, Heure, Minute)
// Exemple : 1er Mars 2024 -> new Date(2024, 2, 1, 0, 0, 0)
const launchDate = new Date();
launchDate.setDate(launchDate.getDate() + 14); // Par défaut : dans 14 jours

function updateCountdown() {
    const now = new Date().getTime();
    const gap = launchDate - now;

    const second = 1000;
    const minute = second * 60;
    const hour = minute * 60;
    const day = hour * 24;

    const d = Math.floor(gap / day);
    const h = Math.floor((gap % day) / hour);
    const m = Math.floor((gap % hour) / minute);
    const s = Math.floor((gap % minute) / second);

    document.getElementById("days").innerText = d.toString().padStart(2, '0');
    document.getElementById("hours").innerText = h.toString().padStart(2, '0');
    document.getElementById("minutes").innerText = m.toString().padStart(2, '0');
    document.getElementById("seconds").innerText = s.toString().padStart(2, '0');
}

setInterval(updateCountdown, 1000);
updateCountdown();