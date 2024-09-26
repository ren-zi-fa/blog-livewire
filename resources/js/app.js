import 'flowbite';
import './bootstrap';

document.addEventListener('livewire:navigated', () => {
    try {
        initFlowbite();
    } catch (error) {
        console.error("Error in initializing Flowbite: ", error);
    }
});
