const logView = async () => {
  const php = ""; //log.php location

  try {
    await fetch(php, {
      method: "POST",
    });
  } catch (error) {
    console.error(error);
  }
};
logView();
