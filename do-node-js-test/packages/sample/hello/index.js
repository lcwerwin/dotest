const includeFile = require("./app-lib.js");

export function main(event, context) {

  // onsole.log(includeFile.testInclude())

  return {
    body: {event, context}
  }
}