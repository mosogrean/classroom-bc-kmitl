/*
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

'use strict';
/**
 * Write your transction processor functions here
 */

var factory = getFactory();
var namespace = 'classroom.management.kmitl';

// ###################################################################

const teacherRoomFunc = async (request, counts, transaction_p) => {

    const teacherRoom = request.roomId;
    if (typeof teacherRoom.teacher == 'undefined') {
        teacherRoom.teacher = [factory.newRelationship(namespace, 'Teachers', request.teacher.getIdentifier())];
        teacherRoom.structure = [request.structure];
    } else {
        teacherRoom.teacher.push(factory.newRelationship(namespace, 'Teachers', request.teacher.getIdentifier()));
        teacherRoom.structure.push(request.structure);
    }
    teacherRoom.counts = counts + 1;
    teacherRoom.matching.push(counts);
    teacherRoom.timestamp = JSON.stringify(request.timestamp);
    teacherRoom.transactionId = request.getIdentifier();
    teacherRoom.transaction_p = transaction_p;
    const assetRegistry = await getAssetRegistry(namespace + '.TeacherRoom');
    await assetRegistry.update(teacherRoom);   
}

const studentRoomFunc = async (request, counts, transaction_p) => {

    const studentRoom = request.roomId;
    if (typeof studentRoom.student == 'undefined') {
        studentRoom.student = [factory.newRelationship(namespace, 'Students', request.student.getIdentifier())];
        studentRoom.structure = [request.structure];
    } else {
        studentRoom.student.push(factory.newRelationship(namespace, 'Students', request.student.getIdentifier()));
        studentRoom.structure.push(request.structure);
    }
    studentRoom.counts = counts + 1;
    studentRoom.matching.push(counts);
    studentRoom.timestamp = JSON.stringify(request.timestamp);
    studentRoom.transactionId = request.getIdentifier();
    studentRoom.transaction_p = transaction_p;
    const assetRegistry = await getAssetRegistry(namespace + '.StudentRoom');
    await assetRegistry.update(studentRoom);   
}

const tsRoomTeachersFunc = async (request, counts, teacherCounts, transaction_p) => {

    const tsRoom = request.roomId;
    if (typeof tsRoom.teacher == 'undefined') {
        tsRoom.teacher = [factory.newRelationship(namespace, 'Teachers', request.teacher.getIdentifier())];
        tsRoom.teacherStructure = [request.structure];
        
    } else {
        tsRoom.teacher.push(factory.newRelationship(namespace, 'Teachers', request.teacher.getIdentifier()));
        tsRoom.teacherStructure.push(request.structure);
    }
    tsRoom.counts = counts + 1;
    tsRoom.teacherCounts = teacherCounts + 1; 
    tsRoom.teacherMatching.push(teacherCounts);
    tsRoom.timestamp = JSON.stringify(request.timestamp);
    tsRoom.transactionId = request.getIdentifier();
    tsRoom.transaction_p = transaction_p;
    const assetRegistry = await getAssetRegistry(namespace + '.TSRoom');
    await assetRegistry.update(tsRoom);   
}

const tsRoomStudentsFunc = async (request, counts, studentCounts, transaction_p) => {

    const tsRoom = request.roomId;
    if (typeof tsRoom.student == 'undefined') {
        tsRoom.student = [factory.newRelationship(namespace, 'Students', request.student.getIdentifier())];
        tsRoom.studentStructure = [request.structure];
    } else {
        tsRoom.student.push(factory.newRelationship(namespace, 'Students', request.student.getIdentifier()));
        tsRoom.studentStructure.push(request.structure);
    }
    tsRoom.counts = counts + 1;
    tsRoom.studentCounts = studentCounts + 1;
    tsRoom.studentMatching.push(studentCounts);
    tsRoom.timestamp = JSON.stringify(request.timestamp);
    tsRoom.transactionId = request.getIdentifier();
    tsRoom.transaction_p = transaction_p;
    const assetRegistry = await getAssetRegistry(namespace + '.TSRoom');
    await assetRegistry.update(tsRoom);
}

const teachersFunc = async (request, counts) => {

    const teachers = request.teacher;
    teachers.room.push(request.roomId.getIdentifier() + "#" + counts);
    const participantRegistry = await getParticipantRegistry(namespace + '.Teachers');
    await participantRegistry.update(teachers);
}

const studentsFunc = async (request, counts) => {

    const students = request.student;
    students.room.push(request.roomId.getIdentifier() + "#" + counts);
    const participantRegistry = await getParticipantRegistry(namespace + '.Students');
    await participantRegistry.update(students);
}

const teachersTSFunc = async (request, teacherCounts) => {

    const teachers = request.teacher;
    teachers.room.push(request.roomId.getIdentifier() + "#" + teacherCounts);
    const participantRegistry = await getParticipantRegistry(namespace + '.Teachers');
    await participantRegistry.update(teachers);

}

const studentsTSFunc = async (request, studentCounts) => {

    const students = request.student;
    students.room.push(request.roomId.getIdentifier() + "#" + studentCounts);
    const participantRegistry = await getParticipantRegistry(namespace + '.Students');
    await participantRegistry.update(students);
}

const teacherRoomRevoke = async (request, check, transaction_p) => {

    const teacherRoom = request.roomId;
    teacherRoom.matching.splice(check,1);
    teacherRoom.structure.splice(check,1);
    teacherRoom.teacher.splice(check,1);
    teacherRoom.timestamp = JSON.stringify(request.timestamp);
    teacherRoom.transactionId = request.getIdentifier();
    teacherRoom.transaction_p = transaction_p;
    const assetRegistry = await getAssetRegistry(namespace + '.TeacherRoom');
    await assetRegistry.update(teacherRoom);
}

const studentRoomRevoke = async (request, check, transaction_p) => {

    const studentRoom = request.roomId;
    studentRoom.matching.splice(check,1);
    studentRoom.structure.splice(check,1);
    studentRoom.teacher.splice(check,1);
    studentRoom.timestamp = JSON.stringify(request.timestamp);
    studentRoom.transactionId = request.getIdentifier();
    studentRoom.transaction_p = transaction_p;
    const assetRegistry = await getAssetRegistry(namespace + '.StudentRoom');
    await assetRegistry.update(studentRoom);
}

const tsRoomTeachersRevoke = async (request, check, transaction_p) => {

    const tsRoom = request.roomId;
    tsRoom.teacherMatching.splice(check,1);
    tsRoom.teacherStructure.splice(check,1);
    tsRoom.teacher.splice(check,1);
    tsRoom.timestamp = JSON.stringify(request.timestamp);
    tsRoom.transactionId = request.getIdentifier();
    tsRoom.transaction_p = transaction_p;
    const assetRegistry = await getAssetRegistry(namespace + '.TSRoom');
    await assetRegistry.update(tsRoom);
}

const tsRoomStudentsRevoke = async (request, check, transaction_p) => {

    const tsRoom = request.roomId;
    tsRoom.studentMatching.splice(check,1);
    tsRoom.studentStructure.splice(check,1);
    tsRoom.student.splice(check,1);
    tsRoom.timestamp = JSON.stringify(request.timestamp);
    tsRoom.transactionId = request.getIdentifier();
    tsRoom.transaction_p = transaction_p;
    const assetRegistry = await getAssetRegistry(namespace + '.TSRoom');
    await assetRegistry.update(tsRoom);
}

const teachersRevoke = async (request) => {

    const teachers = request.teacher;
    for (let j = 0 ; j < teachers.room.length ; j++) {
        if (teachers.room[j] === request.roomId.getIdentifier() + "#" + request.counts) {
            teachers.room.splice(j,1);
        }
    }
    const participantRegistry = await getParticipantRegistry(namespace + '.Teachers');
    await participantRegistry.update(teachers);
}

const studentsRevoke = async (request) => {

    const students = request.student;
    for (let j = 0 ; j < students.room.length ; j++) {
        if (students.room[j] === request.roomId.getIdentifier() + "#" + request.counts) {
            students.room.splice(j,1);
        }
    }
    const participantRegistry = await getParticipantRegistry(namespace + '.Students');
    await participantRegistry.update(students);
}

/**
 * Sample transaction
 * @param {classroom.management.kmitl.TeacherInvokeTeacherRoom} teacherInvokeTeacherRoom
 * @transaction
 */
async function teacherInvokeTeacherRoom(request){
    
    const teacherRoom = request.roomId;
    let transaction_p
    if (!request.roomId.transaction_p) {
        transaction_p = request.getIdentifier();
    } else {
        transaction_p = request.roomId.transactionId;
    }
    const counts = request.roomId.counts;
    if (typeof teacherRoom.structure == 'undefined') {
        await teacherRoomFunc(request, counts, transaction_p);
        await teachersFunc(request, counts);
    } else if (teacherRoom.structure.length == 0) {
        await teacherRoomFunc(request, counts, transaction_p);
        await teachersFunc(request, counts);
    } else {
        let boolean = true;
        for (let i in teacherRoom.structure) {
            if (teacherRoom.structure[i].date === request.structure.date) {
                if (teacherRoom.structure[i].startTime === request.structure.startTime) {
                    boolean = false;
                }
            }
        }
        if (boolean) {
            await teacherRoomFunc(request, counts, transaction_p);
            await teachersFunc(request, counts);
        } else {
            throw new Error ("#### This datetime has already exsit. ####")
        }
    }

}

/**
  * @param {classroom.management.kmitl.TeacherRevokeTeacherRoom} teacherRevokeTeacherRoom
  * @transaction
  */
async function teacherRevokeTeacherRoom(request){

    const teacherRoom = request.roomId;
    let transaction_p
    if (!request.roomId.transaction_p) {
        transaction_p = request.getIdentifier();
    } else {
        transaction_p = request.roomId.transactionId;
    }

    let check = 0;
    let boolean = false;
    for (let i = 0 ; i < teacherRoom.matching.length ; i++){
        if (request.counts === teacherRoom.matching[i]){
            check = i;
            boolean = true;
        }
    }
    if (boolean){
        await teacherRoomRevoke(request, check, transaction_p);
        await teachersRevoke(request);
    } else {
        throw new Error ("#### This room is available. ####")
    }
}

/**
  * @param {classroom.management.kmitl.StudentInvokeStudentRoom} studentInvokeStudentRoom
  * @transaction
  */
async function studentInvokeStudentRoom(request){
    
    const studentRoom = request.roomId;
    let transaction_p
    if (!request.roomId.transaction_p) {
        transaction_p = request.getIdentifier();
    } else {
        transaction_p = request.roomId.transactionId;
    }
    const counts = request.roomId.counts;
    if (typeof studentRoom.structure == 'undefined') {
        await studentRoomFunc(request, counts, transaction_p);
        await studentsFunc(request, counts);
    } else if (studentRoom.structure.length == 0) {
        await studentRoomFunc(request, counts, transaction_p);
        await studentsFunc(request, counts);
    } else {
        let boolean = true;
        for (let i in studentRoom.structure) {
            if (studentRoom.structure[i].date === request.structure.date) {
                if (studentRoom.structure[i].startTime === request.structure.startTime) {
                    boolean = false;
                }
            }
        }
        if (boolean) {
            await studentRoomFunc(request, counts, transaction_p);
            await studentsFunc(request, counts);
        } else {
            throw new Error ("#### This datetime has already exsit. ####")
        }
    }

}

/**
  * @param {classroom.management.kmitl.StudentRevokeStudentRoom} studentRevokeStudentRoom
  * @transaction
  */
 async function studentRevokeStudentRoom(request){

    const studentRoom = request.roomId;
    let transaction_p
    if (!request.roomId.transaction_p) {
        transaction_p = request.getIdentifier();
    } else {
        transaction_p = request.roomId.transactionId;
    }

    let check = 0;
    let boolean = false;
    for (let i = 0 ; i < studentRoom.matching.length ; i++){
        if (request.counts === studentRoom.matching[i]){
            check = i;
            boolean = true;
        }
    }
    if (boolean){
        await studentRoomRevoke(request, check, transaction_p);
        await studentsRevoke(request);
    } else {
        throw new Error ("#### This room is available. ####")
    }
}

/**
 * @param {classroom.management.kmitl.TeacherInvokeTSRoom} teacherInvokeTSRoom
 * @transaction
 */
async function teacherInvokeTSRoom(request){

    const tsRoom = request.roomId;
    let transaction_p
    if (!request.roomId.transaction_p) {
        transaction_p = request.getIdentifier();
    } else {
        transaction_p = request.roomId.transactionId;
    }
    const counts = request.roomId.counts;
    const teacherCounts = request.roomId.teacherCounts;
    if (typeof tsRoom.teacherStructure == 'undefined') {
        await tsRoomTeachersFunc(request, counts, teacherCounts, transaction_p);
        await teachersTSFunc(request, teacherCounts);
    } else if (tsRoom.teacherStructure.length == 0) {
        await tsRoomTeachersFunc(request, counts, teacherCounts, transaction_p);
        await teachersTSFunc(request, teacherCounts);
    } else {
        let boolean = true;
        for (let i in tsRoom.teacherStructure) {
            if (tsRoom.teacherStructure[i].date === request.structure.date) {
                if (tsRoom.teacherStructure[i].startTime === request.structure.startTime) {
                    boolean = false;
                }
            }
        }
        if (boolean) {
            await tsRoomTeachersFunc(request, counts, teacherCounts, transaction_p);
            await teachersTSFunc(request, teacherCounts);
        } else {
            throw new Error ("#### This datetime has already exsit. ####")
        }
    } 
}

/**
 * @param {classroom.management.kmitl.StudentInvokeTSRoom} studentInvokeTSRoom
 * @transaction
 */
async function studentInvokeTSRoom(request){
    
    const tsRoom = request.roomId;
    let transaction_p
    if (!request.roomId.transaction_p) {
        transaction_p = request.getIdentifier();
    } else {
        transaction_p = request.roomId.transactionId;
    }
    const counts = request.roomId.counts;
    const studentCounts = request.roomId.studentCounts;
    if (typeof tsRoom.structure == 'undefined') {
        await tsRoomStudentsFunc(request, counts, studentCounts, transaction_p);
        await studentsTSFunc(request, studentCounts);
    } else if (tsRoom.structure.length == 0) {
        await tsRoomStudentsFunc(request, counts, studentCounts, transaction_p);
        await studentsTSFunc(request, studentCounts);
    } else {
        let boolean = true;
        for (let i in tsRoom.studentStructure) {
            if (tsRoom.studentStructure[i].date === request.structure.date) {
                if (tsRoom.studentStructure[i].startTime === request.structure.startTime) {
                    boolean = false;
                }
            }
        }
        if (boolean) {
            await tsRoomStudentsFunc(request, counts, studentCounts, transaction_p);
            await studentsTSFunc(request, studentCounts);
        } else {
            throw new Error ("#### This datetime has already exsit. ####")
        }
    } 
}

 
/**
 * @param {classroom.management.kmitl.TeacherRevokeTSRoom} teacherRevokeTSRoom
 * @transaction
 */
async function teacherRevokeTSRoom(request){

    const tsRoom = request.roomId;
    let transaction_p
    if (!request.roomId.transaction_p) {
        transaction_p = request.getIdentifier();
    } else {
        transaction_p = request.roomId.transactionId;
    }

    let check = 0;
    let boolean = false;
    for (let i = 0 ; i < tsRoom.teacherMatching.length ; i++){
        if (request.counts === tsRoom.teacherMatching[i]){
            check = i;
            boolean = true;
        }
    }
    if (boolean){
        await tsRoomTeachersRevoke(request, check, transaction_p);
        await teachersRevoke(request);
    } else {
        throw new Error ("#### This room is available. ####")
    }
}

/**
 * @param {classroom.management.kmitl.StudentRevokeTSRoom} studentRevokeTSRoom
 * @transaction
 */
async function studentRevokeTSRoom(request){

    const tsRoom = request.roomId;
    let transaction_p
    if (!request.roomId.transaction_p) {
        transaction_p = request.getIdentifier();
    } else {
        transaction_p = request.roomId.transactionId;
    }

    let check = 0;
    let boolean = false;
    for (let i = 0 ; i < tsRoom.studentMatching.length ; i++){
        if (request.counts === tsRoom.studentMatching[i]){
            check = i;
            boolean = true;
        }
    }
    if (boolean){
        await tsRoomStudentsRevoke(request, check, transaction_p);
        await studentsRevoke(request);
    } else {
        throw new Error ("#### This room is available. ####")
    }
}

