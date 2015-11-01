<?
    // Klassendefinition
    class ModbusOutput extends IPSModule {
 
        // Der Konstruktor des Moduls
        // �berschreibt den Standard Kontruktor von IPS
        //public function __construct($InstanceID) {
            // Diese Zeile nicht l�schen
        //    parent::__construct($InstanceID);
 
            // Selbsterstellter Code
        //}
 
        // �berschreibt die interne IPS_Create($id) Funktion
        public function Create()
        {
        	//Never delete this line!
        	parent::Create();
        		
        	$this->RegisterPropertyInteger("outputID", 0);
        	$this->RegisterPropertyInteger("statusID", 0);
        	$this->RegisterPropertyInteger("autoID", 0);

        }
        
        // �berschreibt die intere IPS_ApplyChanges($id) Funktion
        public function ApplyChanges() {
            // Diese Zeile nicht l�schen
            parent::ApplyChanges();
        }
 
        /**
        * Die folgenden Funktionen stehen automatisch zur Verf�gung, wenn das Modul �ber die "Module Control" eingef�gt wurden.
        * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verf�gung gestellt:
        *
        * ABC_MeineErsteEigeneFunktion($id);
        *
        */
        public function MeineErsteEigeneFunktion() {
            // Selbsterstellter Code
        }
    }
?>