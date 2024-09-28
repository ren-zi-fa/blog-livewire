import 'flowbite';
import './bootstrap';

document.addEventListener('livewire:navigated', () => {
    try {
        initFlowbite();
    } catch (error) {
        console.error("Error in initializing Flowbite: ", error);
    }
});


// document.addEventListener('livewire:init', initializeComponents);
// document.addEventListener('livewire:load', initializeComponents);
// document.addEventListener('livewire:afterDomUpdate', initializeComponents);
// document.addEventListener('livewire:submit', initializeComponents);
// document.addEventListener('livewire:update', initializeComponents);
