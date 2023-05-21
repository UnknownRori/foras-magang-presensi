function readableTime(date: Date): string {
    return date.getDate().toString() + '/' + date.getMonth().toString() + '/' + date.getFullYear() + ' ' + date.getHours() + ':' + date.getMinutes();
}

function timeUpdate(element: HTMLElement): void {
    setInterval(() => {
        let date = new Date()
        element.textContent = readableTime(date);
    }, 1000);
}

const q = document.querySelector('#time') as HTMLElement;

timeUpdate(q);
