const { ref, createApp, computed } = Vue;

const ContactForm = {
  setup(props, { emit }) {
    const loading = ref(false);
    const currentStep = ref(1);
    const data = ref({
      name: '',
      email: '',
      phone: '',
      details: {
        transfer: '0',
        available_timing: [],
        tut_content: [],
        tut_content_other: '',
      }
    });

    function next() {
      if (currentStep.value === 4) {
        return;
      }

      if (!validateCurrentStep()) {
        return;
      }

      currentStep.value++;
    }

    function prev() {
      if (currentStep.value === 1) {
        return;
      }

      currentStep.value--;
    }

    function tabActive(step) {
      if (currentStep.value >= step) {
        return 'active';
      }

      return '';
    }

    function cardClass(step) {
      if (currentStep.value > step) {
        return 'active previous';
      }

      if (currentStep.value === step) {
        return 'active';
      }

      return '';
    }

    const reachedClasses = computed(() => {
      const classes = [];

      for (let i = 1; i <= currentStep.value; i++) {
        classes.push(`reach-${i}`);
      }

      return classes;
    });

    async function submit() {
      if (!validateCurrentStep()) {
        return;
      }

      alert('Submitted!');
    }

    // Validate
    /** @type {Vue.Ref<HTMLFormElement>} form */
    const form = ref(null);
    const formValidated = ref(false);

    function validateCurrentStep() {
      // Validate Form

      return true;
    }

    return {
      loading,
      data,
      currentStep,
      reachedClasses,
      form,
      formValidated,

      prev,
      next,
      tabActive,
      submit,
      cardClass,
    };
  }
};

const app = createApp(ContactForm);
app.mount('#c-contact-form-app');
