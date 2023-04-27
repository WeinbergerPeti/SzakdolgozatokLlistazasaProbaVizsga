class SzakdogaView
{
    #elem
    constructor(elem, szuloElem)
    {
        this.#elem=elem
        console.log("Szakdoga");

        szuloElem.append(`<div id=${elem.id}>
        <div>${elem.szakdoga_nev}</div>
        <div>${elem.githublink}</div>
        <div>${elem.oldalink}</div>
        <div>${elem.tagokneve}</div>
        </div>`);
    }
}
export default SzakdogaView