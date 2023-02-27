const logView = async () => {
  const php = ""; //php.log location

  try {
    await fetch(php, {
      method: "POST",
    });
  } catch (error) {
    console.error(error);
  }
};
logView();
