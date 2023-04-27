import AdatFeldolgozModel from "./AdatFeldolgozModel.js";
import SzakdogakView from "./SzakdogakView.js";

class SzakdogaController
{
    constructor()
    {
        console.log("Controller");

        const token= $(`meta[name="csrf-token"]`).attr("content");
        const adatFeldolgozModel = new AdatFeldolgozModel(token);

        adatFeldolgozModel.adatBe("/szakdogak", this.szakdogakFeltolt)
    }

    szakdogakFeltolt(tomb)
    {
        const szuloElem = $("article");
        new SzakdogakView(tomb, szuloElem)
    }
}
export default SzakdogaController;