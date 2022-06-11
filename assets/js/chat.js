const messageInputChangeHandler = (event) => {
  const sendMessageBtn = document.getElementById('sendMessageBtn');

  if (event.target.value.length === 0) {
    sendMessageBtn.disabled = true;
    return;
  }

  sendMessageBtn.disabled = false;
};
