import SzakdogaView from "./SzakdogaView.js";

class SzakdogakView
{
    constructor(tomb, szuloelem)
    {
        console.log("Szakdogak");
        tomb.forEach(adat => 
        {
            new SzakdogaView(adat, szuloelem)    
        });
    }
}
export default SzakdogakView