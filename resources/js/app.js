import 'flowbite';
import './bootstrap';


function initializeComponents() {
    try {
        initFlowbite(); 
    } catch (error) {
        console.error("Error in initializing components: ", error);
    }
}

document.addEventListener('livewire:navigated', initializeComponents);

// document.addEventListener('livewire:init', initializeComponents);
// document.addEventListener('livewire:load', initializeComponents);
// document.addEventListener('livewire:afterDomUpdate', initializeComponents);
// document.addEventListener('livewire:submit', initializeComponents);
// document.addEventListener('livewire:update', initializeComponents);
